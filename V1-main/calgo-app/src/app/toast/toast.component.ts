import { Component, OnDestroy } from '@angular/core';
import { Subscription } from 'rxjs';
import { ToastService, Toast } from '../services/toast.service';

@Component({
  selector: 'app-toast',
  standalone: true,
  template: `
    @for (t of toasts; track t.id) {
      <div class="toast-item" [class.toast-success]="t.type === 'success'" [class.toast-error]="t.type === 'error'">
        <span class="toast-icon">{{ t.type === 'success' ? '✓' : '✕' }}</span>
        <span class="toast-msg">{{ t.message }}</span>
      </div>
    }
  `,
  styles: [`
    :host {
      position: fixed;
      top: 20px;
      right: 20px;
      z-index: 99999;
      display: flex;
      flex-direction: column;
      gap: 8px;
      pointer-events: none;
    }
    .toast-item {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 12px 20px;
      border-radius: 6px;
      color: #fff;
      font-size: 14px;
      min-width: 280px;
      max-width: 450px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.3);
      animation: slideIn 0.3s ease-out;
      pointer-events: auto;
    }
    .toast-success {
      background: #2e7d32;
    }
    .toast-error {
      background: #c62828;
    }
    .toast-icon {
      font-weight: bold;
      font-size: 16px;
    }
    .toast-msg {
      flex: 1;
      word-break: break-word;
    }
    @keyframes slideIn {
      from { transform: translateX(100%); opacity: 0; }
      to   { transform: translateX(0);    opacity: 1; }
    }
  `]
})
export class ToastComponent implements OnDestroy {
  toasts: { id: number; message: string; type: string }[] = [];
  private sub: Subscription;
  private counter = 0;

  constructor(private toastService: ToastService) {
    this.sub = this.toastService.toast$.subscribe((t: Toast) => {
      const id = ++this.counter;
      this.toasts.push({ id, message: t.message, type: t.type });
      setTimeout(() => {
        this.toasts = this.toasts.filter(x => x.id !== id);
      }, 4000);
    });
  }

  ngOnDestroy() {
    this.sub.unsubscribe();
  }
}
