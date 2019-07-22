import MainMenu from './MainMenu';

export default class App
{
    constructor() {
        this.makeMenu();
    }

    makeMenu() {
        this.mainMenu = new MainMenu();
    }
}