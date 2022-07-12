import "/Users/marsaldana/web/Ch-teau-T-ebe-ice/resources/css/Home.scss";

export default function Home() {
    return (
        <div className="home">
            <div className="home-hero">
                <h1 className="home__title">A Memorable Experience.</h1>
                <button className="home-button"> Reserve Now</button>
            </div>
            <div className="home-about">
                <div className="home_about_description">
                    <h3>About Chateau Trebesice</h3>
                    <p>
                        <strong>
                            Discover the unique magic of a place where the past
                            and presence, history and future, nature and culture
                            are combined in one unique mix.
                        </strong>
                    </p>
                    <p>
                        Château Třebešice is a small Renaissance rural mansion
                        with its own home farm, a beautiful complex of rural
                        buildings from various historical periods on large land
                        rich in water features and beautiful gardens, just 5
                        kilometers from Kutná Hora monuments, one of the most
                        beautiful cities in EUROPE.
                    </p>
                    <button className="home-button">Read more</button>
                </div>
                <img
                    src="./images/interior_library.jpeg"
                    alt="Main Library"
                    width="500px"
                    height="500px"
                />
            </div>
            <div className="home-events">
                <h1 className="home__events_title">Events</h1>
                <p>
                    We can make sure you remember your celebration for their
                    life. We can offer you a luxury ,private celebration that
                    will be made exactly tailored for you and your needs. Over
                    the high quality framework
                </p>
            </div>

            <div class="pic-ctn">
                <img
                    src="./images/img/interior_library.jpeg"
                    alt=""
                    width="500px"
                    height="500px"
                    className="pic"
                />
                <img
                    src="./images/room_blue_bed.jpeg"
                    alt=""
                    width="500px"
                    height="500px"
                    className="pic"
                />
                <img
                    src="./images/room_gold_decor.jpeg"
                    alt=""
                    width="500px"
                    height="500px"
                    className="pic"
                />
                <img
                    src="./images/exterior_garden.jpeg"
                    alt=""
                    width="500px"
                    height="500px"
                    className="pic"
                />
                <img
                    src="./images/exterior_nightview.jpeg"
                    alt=""
                    width="500px"
                    height="500px"
                    className="pic"
                />

                
            </div>
<div className= "btn-gallery">
            <button className="home-button"> View More </button>
            </div>
        </div>
    );
}
