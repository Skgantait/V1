import { Pipe, PipeTransform } from '@angular/core';
import { DomSanitizer, SafeHtml } from '@angular/platform-browser';
import DOMPurify from 'dompurify';

@Pipe({ name: 'safeHtml', standalone: true })
export class SafeHtmlPipe implements PipeTransform {
  constructor(private sanitizer: DomSanitizer) {}

  transform(value: string | null | undefined): SafeHtml {
    const clean = DOMPurify.sanitize(value || '', {
      ALLOWED_TAGS: [
        'b', 'i', 'u', 'em', 'strong', 'a', 'p', 'br', 'ul', 'ol', 'li',
        'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'img', 'table', 'thead',
        'tbody', 'tr', 'th', 'td', 'pre', 'code', 'blockquote', 'span',
        'div', 'hr', 'sub', 'sup', 'dl', 'dt', 'dd', 'figure', 'figcaption'
      ],
      ALLOWED_ATTR: [
        'href', 'src', 'alt', 'title', 'class', 'style', 'target',
        'width', 'height', 'colspan', 'rowspan', 'rel'
      ],
      ALLOW_DATA_ATTR: false,
    });
    return this.sanitizer.bypassSecurityTrustHtml(clean);
  }
}
