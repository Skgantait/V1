import { ApplicationConfig } from '@angular/core';
import { provideHttpClient } from '@angular/common/http';
import { ɵprovideZonelessChangeDetection as provideZonelessChangeDetection } from '@angular/core';

export const appConfig: ApplicationConfig = {
  providers: [
    provideHttpClient(),
    provideZonelessChangeDetection()
  ]
};
