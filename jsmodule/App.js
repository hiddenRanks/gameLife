import MainMenu from './MainMenu';
import LoginBtn from './LoginBtn';

export default class App
{
    constructor() {
        this.makeMenu();
        this.loginBtn();
    }

    makeMenu() {
        this.mainMenu = new MainMenu();
    }

    loginBtn() {
        this.loginBtn = new LoginBtn();
    }
}