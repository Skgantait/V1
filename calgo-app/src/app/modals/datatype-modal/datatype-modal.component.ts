import { Component, Input, Output, EventEmitter } from '@angular/core';
import { FormsModule } from '@angular/forms';

export interface DataTypeOption {
  id: string;
  value: string;
  label: string;
}

const DATA_TYPES: DataTypeOption[] = [
  { id: 'DoubleScaler', value: 'Double Scaler', label: 'Double Scaler' },
  { id: 'ComplexScaler', value: 'Complex Scaler', label: 'Complex Scaler' },
  { id: 'NumericScaler', value: 'Numeric Scaler', label: 'Numeric Scaler' },
  { id: 'DateTime', value: 'DateTime', label: 'Date & Time' },
  { id: 'String', value: 'String', label: 'String' },
  { id: 'Logical', value: 'Logical', label: 'Logical' },
  { id: 'IntegerScaler', value: 'Integer Scaler', label: 'Integer Scaler' },
  { id: 'ByteScaler', value: 'Byte Scaler', label: 'Byte Scaler' },
  { id: 'DoubleMatrix', value: 'Double Matrix', label: 'Double Matrix' },
  { id: 'ComplexMatrix', value: 'Complex Matrix', label: 'Complex Matrix' },
  { id: 'NumericMatrix', value: 'Numeric Matrix', label: 'Numeric Matrix' },
  { id: 'LogicalMatrix', value: 'Logical Matrix', label: 'Logical Matrix' },
  { id: 'IntegerMatrix', value: 'Integer Matrix', label: 'Integer Matrix' },
  { id: 'ByteMatrix', value: 'Byte Matrix', label: 'Byte Matrix' },
  { id: 'DoubleField', value: 'Double Field', label: 'Double Field' },
  { id: 'ComplexField', value: 'Complex Field', label: 'Complex Field' },
  { id: 'NumericField', value: 'Numeric Field', label: 'Numeric Field' },
  { id: 'DateTimeField', value: 'DateTime Field', label: 'Date & Time Field' },
  { id: 'StringField', value: 'String Field', label: 'String Field' },
  { id: 'LogicalField', value: 'Logical Field', label: 'Logical Field' },
  { id: 'IntegerField', value: 'Integer Field', label: 'Integer Field' },
  { id: 'ByteField', value: 'Byte Field', label: 'Byte Field' },
  { id: 'DoubleTable', value: 'Double Table', label: 'Double Table' },
  { id: 'ComplexTable', value: 'Complex Table', label: 'Complex Table' },
  { id: 'NumericTable', value: 'Numeric Table', label: 'Numeric Table' },
  { id: 'DateTimeTable', value: 'DateTime Table', label: 'Date & Time Table' },
  { id: 'StringTable', value: 'String Table', label: 'String Table' },
  { id: 'LogicalTable', value: 'Logical Table', label: 'Logical Table' },
  { id: 'IntegerTable', value: 'Integer Table', label: 'Integer Table' },
  { id: 'ByteTable', value: 'Byte Table', label: 'Byte Table' },
  { id: 'DoubleMatrixArray', value: 'Double Matrix Array', label: 'Double Matrix Array' },
  { id: 'ComplexMatrixArray', value: 'Complex Matrix Array', label: 'Complex Matrix Array' },
  { id: 'NumericMatrixArray', value: 'Numeric Matrix Array', label: 'Numeric Matrix Array' },
  { id: 'LogicalMatrixArray', value: 'Logical Matrix Array', label: 'Logical Matrix Array' },
  { id: 'IntegerMatrixArray', value: 'Integer Matrix Array', label: 'Integer Matrix Array' },
  { id: 'ByteMatrixArray', value: 'Byte Matrix Array', label: 'Byte Matrix Array' }
];

@Component({
  selector: 'app-datatype-modal',
  standalone: true,
  imports: [FormsModule],
  template: `
    <div class="fb-modal-backdrop" (click)="cancel.emit()"></div>
    <div class="fb-modal">
      <h3>Variable Type</h3>
      <fieldset class="hscroll">
        @for (dt of dataTypes; track dt.id) {
          <div>
            <input type="checkbox" [id]="'fb-dt-' + dt.id" [(ngModel)]="checked[dt.id]">
            <label [for]="'fb-dt-' + dt.id">{{ dt.label }}</label>
          </div>
        }
      </fieldset>
      <div class="fb-modal-btns">
        <a href="javascript:" class="button2" (click)="cancel.emit()">Cancel</a>
        <a href="javascript:" class="button2" (click)="onConfirm()">ok</a>
      </div>
    </div>
  `
})
export class DatatypeModalComponent {
  @Input() set currentValue(val: string) {
    const cleaned = (val || '').replace(/^Data Types:\s*/, '');
    const current = cleaned ? cleaned.split(' | ').map(s => s.trim()) : [];
    this.checked = {};
    for (const dt of this.dataTypes) {
      this.checked[dt.id] = current.includes(dt.value);
    }
  }
  @Output() confirm = new EventEmitter<string>();
  @Output() cancel = new EventEmitter<void>();

  dataTypes = DATA_TYPES;
  checked: Record<string, boolean> = {};

  onConfirm(): void {
    const selected = this.dataTypes
      .filter(dt => this.checked[dt.id])
      .map(dt => dt.value);
    this.confirm.emit(selected.join(' | '));
  }
}
