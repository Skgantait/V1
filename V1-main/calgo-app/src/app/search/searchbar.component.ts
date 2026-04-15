import { Component, ChangeDetectorRef, ViewEncapsulation, OnInit } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';
import { SearchService, SearchResult } from '../services/search.service';

@Component({
  selector: 'app-search',
  standalone: true,
  imports: [CommonModule, FormsModule],
  templateUrl: './searchbar.component.html',
  encapsulation: ViewEncapsulation.None
})
export class SearchbarComponent implements OnInit {
  query = '';
  searched = false;
  searchedQuery = '';
  resultCount = 0;
  results: SearchResult[] = [];

  constructor(private searchService: SearchService, private cdr: ChangeDetectorRef) {}

  ngOnInit(): void {
    const params = new URLSearchParams(window.location.search);
    const srch = params.get('srch');
    if (srch) {
      this.query = srch;
      this.doSearch(srch);
    }
  }

  onSearch(): void {
    const q = this.query.trim();
    if (!q) return;
    this.doSearch(q);
  }

  private doSearch(q: string): void {
    this.searchService.search(q).subscribe({
      next: (data) => {
        this.searched = true;
        this.searchedQuery = q;
        this.resultCount = data.count;
        this.results = data.results;
        this.cdr.detectChanges();
      },
      error: (err) => console.error('Search failed', err)
    });
  }

  onFuncClick(name: string): void {
    window.location.href = 'index.html?fnm=' + encodeURIComponent(name);
  }
}
