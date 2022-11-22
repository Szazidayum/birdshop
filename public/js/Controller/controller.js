import MadarModell from "../Modell/modell.js";
import MadarakView from "../View/madarakView.js";
import MadarView from "../View/madarView.js";

class MadarController{
    constructor() {
        const token = $('meta[name="csrf-token"]').attr("content");
        const madarModell = new MadarModell(token);
        madarModell.adatBe("/birds", this.madarAdatok);
        $(window).on("dbValtozik",()=>{
            this.madarAdatok(madarModell.getTomb());
        });
    }

    madarAdatok(tomb){
        let szuloElem = $(".madarakLista");
        new MadarakView(tomb, szuloElem);
    }
    tombAdatok(tomb){
        new MadarView(tomb);
    }
}

export default MadarController;