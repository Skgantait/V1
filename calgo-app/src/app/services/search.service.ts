import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { environment } from '../../environments/environment';

export interface SearchResult {
  name_val: string;
  main_categori: string;
  sort_description: string;
}

export interface SearchResponse {
  count: number;
  results: SearchResult[];
}

@Injectable({ providedIn: 'root' })
export class SearchService {
  private apiUrl = `${environment.apiBaseUrl}/search`;

  constructor(private http: HttpClient) {}

  search(query: string): Observable<SearchResponse> {
    return this.http.get<SearchResponse>(this.apiUrl, {
      params: { q: query }
    });
  }
}
