import { Component } from '@angular/core';
import { SidebarComponent } from './sidebar/sidebar.component';
import { SearchbarComponent } from './search/searchbar.component';
import { FuncbodyComponent } from './function-editor/funcbody.component';
import { ToastComponent } from './toast/toast.component';

@Component({
  selector: 'app-root',
  standalone: true,
  imports: [SidebarComponent, SearchbarComponent, FuncbodyComponent, ToastComponent],
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css'],
})
export class AppComponent {
  openMathTool(): void {
    window.open('mathscribe/jqMath.html', '_blank');
  }
}
