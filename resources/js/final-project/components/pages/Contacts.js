

export default function Contacts() {
    return (
        <main className="contact">
            <div className="contact-hero">
                {/* <img src="./images/ContactUs_hero.jpg" alt="receptionist picture" className="contact__image" /> */}
                <h1 className="contact__title">Contact Us</h1>
            </div>
            <div className="contact__contacts">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Chateau%20Trebesice%20Z%C3%A1mek%20T%C5%99ebe%C5%A1ice%201%2028601%20%C4%8C%C3%A1slav%20Czech%20Republic%20&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                        </iframe>
                    </div>
                </div>

            </div>
        </main>
    )
}