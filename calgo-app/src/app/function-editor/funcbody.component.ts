import { Component, ChangeDetectorRef, ViewEncapsulation } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { FuncService, FuncData, FuncResponse } from '../services/func.service';
import { ToastService } from '../services/toast.service';
import { SafeHtmlPipe } from '../safe-html.pipe';
import { CategoryModalComponent } from '../modals/category-modal.component';
import { DatatypeModalComponent } from '../modals/datatype-modal.component';
import { HtmlEditorModalComponent } from '../modals/html-editor-modal.component';
import { PromptDialogComponent } from '../modals/prompt-dialog.component';

@Component({
  selector: 'app-funcbody',
  standalone: true,
  imports: [
    FormsModule,
    SafeHtmlPipe,
    CategoryModalComponent,
    DatatypeModalComponent,
    HtmlEditorModalComponent,
    PromptDialogComponent
  ],
  templateUrl: './funcbody.component.html',
  styleUrls: ['./funcbody.component.css'],
  encapsulation: ViewEncapsulation.None
})
export class FuncbodyComponent {

  func: FuncData = {};
  srlno = '';
  isUpdate = false;

  // Modal state
  modalOpen = false;
  activeModal: 'category' | 'datatype' | 'htmleditor' | null = null;
  selectedCategory = '';
  dataTypeTarget = '';
  htmlEditorTarget = '';
  htmlEditorTitle = '';
  htmlEditorContent = '';

  // Prompt dialog state
  promptOpen = false;
  promptTitle = '';
  promptValue = '';
  promptTarget = '';

  // Range helpers
  syntaxRange = Array.from({ length: 15 }, (_, i) => i);
  inputRange = Array.from({ length: 20 }, (_, i) => i);
  outputRange = Array.from({ length: 20 }, (_, i) => i);
  exampleRange = Array.from({ length: 15 }, (_, i) => i);
  refRange = Array.from({ length: 12 }, (_, i) => i);
  linkRange = Array.from({ length: 12 }, (_, i) => i);

  hidden = false;

  constructor(private funcService: FuncService, private cdr: ChangeDetectorRef, private toast: ToastService) {}

  ngOnInit() {
    const params = new URLSearchParams(window.location.search);
    // Hide funcbody when showing search results
    if (params.get('srch')) {
      this.hidden = true;
      return;
    }
    const fnm = params.get('fnm');
    if (fnm) {
      this.loadFunc(fnm);
    } else {
      this.loadNew();
    }
  }

  loadNew() {
    this.funcService.getNew().subscribe(data => {
      this.func = data;
      this.srlno = '';
      this.isUpdate = false;
      this.cdr.detectChanges();
    });
  }

  loadFunc(name: string) {
    this.funcService.getByName(name).subscribe({
      next: (data) => {
        this.func = data;
        this.srlno = (data['srlno'] || '').toString();
        this.isUpdate = !!this.srlno;
        this.cdr.detectChanges();
      },
      error: () => {
        this.loadNew();
      }
    });
  }

  // --- Field display helpers ---
  getField(key: string, fallback?: string): string {
    const val = this.func[key];
    return (val && val.trim()) ? val : (fallback || key);
  }

  getFieldRaw(key: string): string {
    return this.func[key] || '';
  }

  setField(key: string, value: string) {
    this.func[key] = value;
    this.cdr.detectChanges();
  }

  // --- Category Modal ---
  openCategory() {
    this.selectedCategory = this.getFieldRaw('main_categori');
    this.activeModal = 'category';
    this.modalOpen = true;
    this.cdr.detectChanges();
  }

  confirmCategory(value: string) {
    this.func['main_categori'] = value;
    this.closeModal();
  }

  // --- Prompt Dialog ---
  openPromptSyntax(fieldKey: string) {
    this.promptTarget = fieldKey;
    this.promptTitle = fieldKey;
    this.promptValue = this.getFieldRaw(fieldKey);
    this.promptOpen = true;
    this.cdr.detectChanges();
  }

  openPromptDesc(fieldKey: string) {
    this.promptTarget = fieldKey;
    this.promptTitle = fieldKey;
    this.promptValue = this.getFieldRaw(fieldKey);
    this.promptOpen = true;
    this.cdr.detectChanges();
  }

  confirmPrompt(value: string) {
    this.func[this.promptTarget] = value.trim() === '' ? '' : value;
    this.promptOpen = false;
    this.cdr.detectChanges();
  }

  cancelPrompt() {
    this.promptOpen = false;
    this.cdr.detectChanges();
  }

  // --- Data Type Modal ---
  openDataType(fieldKey: string) {
    this.dataTypeTarget = fieldKey;
    this.activeModal = 'datatype';
    this.modalOpen = true;
    this.cdr.detectChanges();
  }

  confirmDataType(value: string) {
    this.func[this.dataTypeTarget] = value;
    this.closeModal();
  }

  // --- HTML Editor Modal ---
  openHtmlEditor(fieldKey: string) {
    this.htmlEditorTarget = fieldKey;
    this.htmlEditorTitle = 'HTML Editor: ' + fieldKey;
    this.htmlEditorContent = this.getFieldRaw(fieldKey);
    this.activeModal = 'htmleditor';
    this.modalOpen = true;
    this.cdr.detectChanges();
  }

  confirmHtmlEditor(value: string) {
    this.func[this.htmlEditorTarget] = value;
    this.closeModal();
  }

  closeModal() {
    this.modalOpen = false;
    this.activeModal = null;
    this.cdr.detectChanges();
  }

  // --- Build POST data (matches makePostArray in calgoricadmin.js) ---
  buildPostData(): FuncData {
    const d: FuncData = {};
    d['srlno'] = this.srlno;
    d['nameval'] = this.getFieldRaw('name_val');
    d['sortdescription'] = this.getFieldRaw('sort_description');
    d['maincategori'] = (this.getFieldRaw('main_categori') || '').replace('&amp;', '&');
    d['subcatagori'] = this.getFieldRaw('sub_catagori');

    for (let i = 0; i < 15; i++) {
      d[`syntax${i}`] = this.getFieldRaw(`syntax${i}`);
      d[`description${i}`] = this.getFieldRaw(`description${i}`);
    }
    for (let i = 0; i < 15; i++) {
      d[`examples${i}`] = this.getFieldRaw(`examples${i}`);
      d[`ExampleDescription${i}`] = this.getFieldRaw(`ExampleDescription${i}`);
    }
    for (let i = 0; i < 20; i++) {
      d[`input${i}`] = this.getFieldRaw(`input${i}`);
      d[`inputtype${i}`] = this.getFieldRaw(`input_type${i}`);
      d[`inputdesc${i}`] = this.getFieldRaw(`input_desc${i}`);
    }
    for (let i = 0; i < 20; i++) {
      d[`output${i}`] = this.getFieldRaw(`output${i}`);
      d[`outputtype${i}`] = this.getFieldRaw(`output_type${i}`);
      d[`outputdesc${i}`] = this.getFieldRaw(`output_desc${i}`);
    }
    d['api'] = this.getFieldRaw('api');
    d['algorithms'] = this.getFieldRaw('algorithms');
    for (let i = 0; i < 12; i++) {
      d[`references${i}`] = this.getFieldRaw(`references${i}`);
      d[`link${i}`] = this.getFieldRaw(`link${i}`);
    }
    return d;
  }

  // --- Insert / Update ---
  insertPost() {
    const data = this.buildPostData();
    this.funcService.insert(data).subscribe((res: FuncResponse) => {
      if (res.error) {
        this.toast.error(res.message);
      } else {
        this.srlno = res.response;
        this.isUpdate = !!this.srlno;
        this.toast.success(res.message);
        this.cdr.detectChanges();
      }
    });
  }

  updatePost() {
    const data = this.buildPostData();
    this.funcService.update(data).subscribe((res: FuncResponse) => {
      if (res.error) {
        this.toast.error(res.message);
      } else {
        this.srlno = res.response;
        this.toast.success(res.message);
        this.cdr.detectChanges();
      }
    });
  }

}
