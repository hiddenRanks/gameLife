import Slide from './Slide';

export default class App
{
    constructor() {
        this.makeSlider();
    }

    makeSlider() {
        //메인 페이지 메뉴와 이미지슬라이드
        this.slide = new Slide();
    }
}