import { Component, Input, Output, EventEmitter } from '@angular/core';
import { FormsModule } from '@angular/forms';

@Component({
  selector: 'app-category-modal',
  standalone: true,
  imports: [FormsModule],
  template: `
    <div class="fb-modal-backdrop" (click)="cancel.emit()"></div>
    <div class="fb-modal">
      <h3>main_categori</h3>
      <select [(ngModel)]="selected">
        @for (cat of categories; track cat) {
          <option [value]="cat">{{ cat }}</option>
        }
      </select>
      <div class="fb-modal-btns">
        <a href="javascript:" class="button2" (click)="cancel.emit()">Cancel</a>
        <a href="javascript:" class="button2" (click)="confirm.emit(selected)">ok</a>
      </div>
    </div>
  `
})
export class CategoryModalComponent {
  @Input() selected = '';
  @Output() confirm = new EventEmitter<string>();
  @Output() cancel = new EventEmitter<void>();

  categories = [
    'Binary & Memory', 'Data Function', 'Database Functions', 'Date & Time',
    'Files & Folders', 'Finance', 'Geometry', 'Image Processing', 'Integration',
    'IO', 'Linear Algebra', 'Machine Learning', 'Mathematics', 'Matrix Operation',
    'Optimization & Equation Solver', 'Others', 'Polynomial & BSpline',
    'Regression', 'Signal Processing', 'Statistics', 'String', 'Syntax',
    'System Info', 'Table & Field'
  ];
}
