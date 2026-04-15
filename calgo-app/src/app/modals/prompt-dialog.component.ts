import { Component, Input, Output, EventEmitter } from '@angular/core';
import { FormsModule } from '@angular/forms';

@Component({
  selector: 'app-prompt-dialog',
  standalone: true,
  imports: [FormsModule],
  template: `
    <div class="fb-modal-backdrop" (click)="cancel.emit()"></div>
    <div class="fb-prompt">
      <h4>{{ title }}</h4>
      <textarea [(ngModel)]="value" rows="5"></textarea>
      <div class="fb-prompt-btns">
        <a href="javascript:" class="button2" (click)="cancel.emit()">Cancel</a>
        <a href="javascript:" class="button2" (click)="confirm.emit(value)">Submit</a>
      </div>
    </div>
  `
})
export class PromptDialogComponent {
  @Input() title = '';
  @Input() value = '';
  @Output() confirm = new EventEmitter<string>();
  @Output() cancel = new EventEmitter<void>();
}
