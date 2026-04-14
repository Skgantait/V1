import { Component, Input, Output, EventEmitter, ViewChild, ElementRef } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { FuncService } from '../../services/func.service';

@Component({
  selector: 'app-html-editor-modal',
  standalone: true,
  imports: [FormsModule],
  template: `
    <div class="fb-modal-backdrop" (click)="cancel.emit()"></div>
    <div class="fb-modal fb-modal-wide">
      <h5>{{ title }}</h5>
      <p style="font-size: 14px; color: #BDBDBD;">Click a tool from toolbar and the appropriate code copy in to your clipboard.</p>
      <ul class="ulm">
        <li class="lim"><a title="Code" href="javascript:" (click)="toolsClick('code')">&#60;/&#62;</a></li>
        <li class="lim"><a title="Div" href="javascript:" (click)="toolsClick('div')">&#60;div&#62;</a></li>
        <li class="lim"><a title="P" href="javascript:" (click)="toolsClick('p')">&#60;p&#62;</a></li>
        <li class="lim"><a title="H3" href="javascript:" (click)="toolsClick('h3')">&#60;h3&#62;</a></li>
        <li class="lim"><a title="List" href="javascript:" (click)="toolsClick('list')">&#60;L&#62;</a></li>
        <li class="lim"><a title="H-Link" href="javascript:" (click)="toolsClick('link')">&#60;a&#62;</a></li>
        <li class="lim"><a title="Image" href="javascript:" (click)="openImagePicker()">&#60;img&#62;</a></li>
        <li class="lim">
          <div class="dropdown">
            <button title="Table" (click)="dropdownOpen = !dropdownOpen" class="dropbtn">&#60;Table&#62;</button>
          </div>
        </li>
      </ul>
      <input #imageFileInput type="file" accept="image/*" style="display:none" (change)="onImageSelected($event)">
      @if (dropdownOpen) {
        <div class="fb-dropdown-content">
          <input type="text" [(ngModel)]="tableCols" placeholder="Cols" style="width:60px">
          <input type="text" [(ngModel)]="tableRows" placeholder="Rows" style="width:60px">
          <a href="javascript:" class="button2" (click)="tableClick()">GetTable</a>
        </div>
      }
      <div class="row clearfix" style="text-align: center; margin: 0px; padding: 0px;">
        <textarea [(ngModel)]="content" style="width:100%; height: 300px"></textarea>
      </div>
      <div class="fb-modal-btns">
        <a href="javascript:" class="button2" (click)="cancel.emit()">Cancel</a>
        <a href="javascript:" class="button2" (click)="confirm.emit(content)">ok</a>
      </div>
    </div>
  `
})
export class HtmlEditorModalComponent {
  @Input() title = '';
  @Input() content = '';
  @Output() confirm = new EventEmitter<string>();
  @Output() cancel = new EventEmitter<void>();

  @ViewChild('imageFileInput') imageFileInput!: ElementRef<HTMLInputElement>;

  tableRows = '';
  tableCols = '';
  dropdownOpen = false;

  constructor(private funcService: FuncService) {}

  toolsClick(tool: string): void {
    let text = '';
    if (tool === 'div') text = '<div>\nInsert Your Div Content...\n</div>';
    else if (tool === 'p') text = '<p>Insert New Paragraph...</p>';
    else if (tool === 'h3') text = '<h3>Insert A Header...</h3>';
    else if (tool === 'list') text = '<ul>\n<li>\nInsert 1st List Content\n</li>\n</ul>';
    else if (tool === 'link') text = "<a href='Your-URL' target='_blank'>Your Hyper-Link Text...</a>";
    else if (tool === 'code') {
      const cid = 'code' + Date.now();
      text = `<div class="code">\n<pre>\n<span class="codespan" id="${cid}">Insert Your Code...</span>\n</pre>\n<button class="codeButton" title="Copy Code to Clipboard" onclick="codeCopy('${cid}')"><i class="fa fa-copy"></i></button>\n</div>`;
    }
    if (text) {
      this.appendAndCopy(text);
    }
    this.dropdownOpen = false;
  }

  tableClick(): void {
    const r = parseInt(this.tableRows, 10) || 0;
    const c = parseInt(this.tableCols, 10) || 0;
    if (r > 0 && c > 0) {
      let tbl = '<table class="matrx">\n<caption>Put Your Table Header..</caption>\n<tbody>';
      for (let i = 0; i < r; i++) {
        tbl += '<tr>\n';
        for (let j = 0; j < c; j++) {
          tbl += `<td>R${i}C${j}</td>\n`;
        }
        tbl += '</tr>\n';
      }
      tbl += '</tbody></table>';
      this.appendAndCopy(tbl);
    }
    this.dropdownOpen = false;
  }

  openImagePicker(): void {
    this.dropdownOpen = false;
    this.imageFileInput.nativeElement.click();
  }

  onImageSelected(event: Event): void {
    const input = event.target as HTMLInputElement;
    const file = input.files && input.files.length ? input.files[0] : null;
    if (!file) return;

    this.funcService.uploadImage(file).subscribe({
      next: (res) => {
        if (res.error || !res.response?.UploadFile?.length) {
          alert(res.message || 'Upload failed');
          return;
        }
        const url = res.response.UploadFile[0].url;
        const imgPath = `${window.location.origin}/upload/${url}`;
        const snippet = `<div class="imgcont">\n<h4>Put your Image Header..</h4>\n<hr>\n<img src="${imgPath}"></div>`;
        this.appendAndCopy(snippet);
      },
      error: () => alert('Upload failed'),
      complete: () => { input.value = ''; }
    });
  }

  private appendAndCopy(text: string): void {
    if (this.content && !this.content.endsWith('\n')) {
      this.content += '\n';
    }
    this.content += text;
    this.copyToClipboard(text);
  }

  private copyToClipboard(text: string): void {
    if (!text) return;
    if (navigator.clipboard && window.isSecureContext) {
      navigator.clipboard.writeText(text).catch(() => this.fallbackCopy(text));
      return;
    }
    this.fallbackCopy(text);
  }

  private fallbackCopy(text: string): void {
    const textArea = document.createElement('textarea');
    textArea.value = text;
    textArea.setAttribute('readonly', '');
    textArea.style.position = 'fixed';
    textArea.style.opacity = '0';
    document.body.appendChild(textArea);
    textArea.focus();
    textArea.select();
    try { document.execCommand('copy'); } catch { /* ignore */ }
    document.body.removeChild(textArea);
  }
}
