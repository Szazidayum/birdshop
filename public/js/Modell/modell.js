class MadarModell{
    #madarakTomb = [];
    constructor(token) {
        this.token = token;
    }
    adatBe(vegpont, myCallBack){
        fetch(vegpont, {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': this.token,
            },
            body: JSON.stringify(myCallBack),
        })
            .then((response) => response.json())
            .then((data) => {
                this.#madarakTomb = data.madar;
                myCallBack(this.#madarakTomb);
            })
            .catch((error) => {
                console.error('Error:', error);
            });
    }
    getTomb(){
        return this.#madarakTomb;
    }
}

export default MadarModell;