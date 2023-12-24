import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ESGScoreComponent } from './esg-score.component';

describe('ESGScoreComponent', () => {
  let component: ESGScoreComponent;
  let fixture: ComponentFixture<ESGScoreComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ESGScoreComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(ESGScoreComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
