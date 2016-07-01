import { DonutsPage } from './app.po';

describe('donuts App', function() {
  let page: DonutsPage;

  beforeEach(() => {
    page = new DonutsPage();
  });

  it('should display message saying app works', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('app works!');
  });
});
