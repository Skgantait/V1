import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { environment } from '../../environments/environment';

export interface FuncData {
  [key: string]: string;
}

export interface FuncResponse {
  error: number;
  message: string;
  response: string;
}

export interface UploadItem {
  file_name: string;
  url: string;
  msg: string;
  responseCode: number;
}

export interface UploadResponse {
  type: 'UploadFile';
  error: number;
  message: string;
  response: {
    UploadFile: UploadItem[];
  };
}

@Injectable({ providedIn: 'root' })
export class FuncService {
  private apiUrl = `${environment.apiBaseUrl}/func`;
  private uploadUrl = `${environment.apiBaseUrl}/upload`;

  constructor(private http: HttpClient) {}

  getNew(): Observable<FuncData> {
    return this.http.get<FuncData>(this.apiUrl + '/new');
  }

  getByName(name: string): Observable<FuncData> {
    return this.http.get<FuncData>(this.apiUrl + '/' + encodeURIComponent(name));
  }

  insert(data: FuncData): Observable<FuncResponse> {
    return this.http.post<FuncResponse>(this.apiUrl, data);
  }

  update(data: FuncData): Observable<FuncResponse> {
    return this.http.put<FuncResponse>(this.apiUrl, data);
  }

  uploadImage(file: File): Observable<UploadResponse> {
    const formData = new FormData();
    formData.append('file', file);
    return this.http.post<UploadResponse>(this.uploadUrl, formData);
  }
}
