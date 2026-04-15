import { Component, OnInit, ViewEncapsulation, ChangeDetectorRef } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FunclistService, FuncList } from '../services/funclist.service';

interface Category {
  key: string;
  icon: string;
  items: string[];
  open: boolean;
}

@Component({
  selector: 'app-sidebar',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './sidebar.component.html',
  styleUrls: ['./sidebar.component.css'],
  encapsulation: ViewEncapsulation.None
})
export class SidebarComponent implements OnInit {
  categories: Category[] = [];
  sidebarVisible = false;

  private iconMap: Record<string, string> = {
    'Syntax':       'images/func/syntax2.png',
    'IO':           'images/func/IO2.png',
    'Binary & Memory': 'images/func/bin2.png',
    'System Info':  'images/func/sys2.png',
    'Files & Folders': 'images/func/filefolder2.png',
    'String':       'images/func/str2.png',
    'Date & Time':  'images/func/dt2.png',
    'Table & Field':'images/func/table2.png',
    'Matrix Operation':'images/func/mtrx2.png',
    'Mathematics':  'images/func/sfun2.png',
    'Linear Algebra':'images/func/algb2.png',
    'Geometry':     'images/func/geom2.png',
    'Integration':  'images/func/int2.png',
    'Polynomial & BSpline':'images/func/poly2.png',
    'Optimization & Equation Solver':'images/func/optm2.png',
    'Data Function':'images/func/datafun2.png',
    'Statistics':   'images/func/stat2.png',
    'Regression':   'images/func/reg2.png',
    'Machine Learning':'images/func/ml2.png',
    'Finance':      'images/func/fin2.png',
    'Signal Processing':'images/func/sign2.png',
    'Image Processing':'images/func/Image2.png',
    'Database Functions':'images/func/db2.png',
    'Others':       'images/func/others2.png'
  };

  private categoryOrder = [
    'Syntax', 'IO', 'Binary & Memory', 'System Info', 'Files & Folders',
    'String', 'Date & Time', 'Table & Field', 'Matrix Operation', 'Mathematics',
    'Linear Algebra', 'Geometry', 'Integration', 'Polynomial & BSpline',
    'Optimization & Equation Solver', 'Data Function', 'Statistics', 'Regression',
    'Machine Learning', 'Finance', 'Signal Processing', 'Image Processing',
    'Database Functions', 'Others'
  ];

  constructor(private funclistService: FunclistService, private cdr: ChangeDetectorRef) {}

  ngOnInit(): void {
    this.funclistService.getFuncList().subscribe({
      next: (data: FuncList) => {
        this.categories = this.categoryOrder.map(key => ({
          key,
          icon: this.iconMap[key] || '',
          items: data[key] || [],
          open: false
        }));
        this.cdr.markForCheck();
      },
      error: (err) => console.error('Failed to load function list', err)
    });
  }

  toggleCategory(cat: Category): void {
    cat.open = !cat.open;
    this.cdr.detectChanges();
  }

  toggleSidebar(): void {
    this.sidebarVisible = !this.sidebarVisible;
    this.cdr.detectChanges();
  }

  onFuncClick(name: string): void {
    window.location.href = 'index.html?fnm=' + encodeURIComponent(name);
  }
}
