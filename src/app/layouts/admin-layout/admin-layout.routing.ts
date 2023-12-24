import { Routes } from '@angular/router';

import { DashboardComponent } from '../../pages/dashboard/dashboard.component';
import { ESGScoreComponent } from 'src/app/pages/esg-score/esg-score.component';





export const AdminLayoutRoutes: Routes = [
    { path: 'dashboard',      component: DashboardComponent },
 
    { path: 'esg_score',      component: ESGScoreComponent }
];
