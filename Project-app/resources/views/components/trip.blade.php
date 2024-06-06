<div class="trip">
    <h1>Lorem...</h1>
    <p>Lorem...</p>
    <div class="tripcard">
        <div class="t-card">
            <div class="t-image">
                <img src="{{ asset('images/Car.jpg') }}" alt="Trip Image">
            </div>
            <h4>Trip in Paris</h4>
            <p>govno</p>
        </div>
        <div class="t-card">
            <div class="t-image">
                <img src="{{ asset('images/Car.jpg') }}" alt="Trip Image">
            </div>
            <h4>Trip in Paris</h4>
            <p>govno</p>
        </div>
        <div class="t-card">
            <div class="t-image">
                <img src="{{ asset('images/Car.jpg') }}" alt="Trip Image">
            </div>
            <h4>Trip in Paris</h4>
            <p>govno</p>
        </div>
    </div>
</div>

<style>
.trip{
    margin: 4rem 6rem;
    color: #2a2a2a;
}

.trip h1{
    font-size: 3rem;
}

.tripcard{
    margin-top: 3rem;
    display: flex;
    justify-content: space-between;
}

.t-card{
    width: 32%;
    text-align: start;
    box-shadow: 0 5px 25px 2px rgba(0,0,0,0.11);
    border-radius: 7px;
    cursor: pointer;
    padding: 1rem .8rem;
}

.t-image{
    height: 200px;
    overflow: hidden;
    border-radius: 7px;
}

.t-image img{
    width: 100%;
    height: 100%;
    transition: 0.3s ease-in-out;
    border-radius: 7px;
}

.t-image:hover{
    transform: scale(1.3);
}

.t-card h4{
    font-size: 1.3rem;
    padding: .9rem 0 .2rem 0;
}

@media screen and (max-width:850px) {
    .trip{
        margin: 4rem 2rem;
    }

    .tripcard{
        flex-direction: column;
    }

    .t-card{
        width: 100%;
        margin-bottom: 1.5rem;
    }
}

<style>