import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { environment } from '../../environments/environment';

export type FuncList = Record<string, string[]>;

@Injectable({ providedIn: 'root' })
export class FunclistService {
  private apiUrl = `${environment.apiBaseUrl}/funclist`;

  constructor(private http: HttpClient) {}

  getFuncList(): Observable<FuncList> {
    return this.http.get<FuncList>(this.apiUrl);
  }
}
