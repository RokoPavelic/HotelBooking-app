export default function Events() {
    return (
        <div className="events">
            <div className="events-hero">
                <h1 className="events__title">A Memorable Experience.</h1>
            </div>
            <div className="content">
                <h3> Let us host you events</h3>
                <p>
                    We count with experitse staff to make your event one in a
                    life experiance Let out enchanting atmospher be the setting
                    for your special day let our award winning chef add and
                    all-involving sensory experiance for your guests
                </p>
            </div>
            <div className="gallery_cont">
                <img
                    className="gallery_img"
                    src="./images/events_gallery_garden.jpeg"
                    width="300px"
                    height="300px"
                />
                <img
                    className="gallery_img"
                    src="./images/events_gallery_gathering.jpeg"
                    width="300px"
                    height="300px"
                />
                <img
                    className="gallery_img"
                    src="./images/events_hero.jpeg"
                    width="300px"
                    height="300px"
                />
            </div>
            <button className="events-btn">Book Consultation</button>

            <div className="services">
                <div className="services-container">
                    <h3 className="services-title"> Our Services Include:</h3>
                    <ul>
                        <li>Catering</li>
                        <li>Professiona Chef</li>
                        <li>Accommodation for guests</li>
                    </ul>
                </div>
                <div className="services-container">
                    <ul>
                        <li>Seating- staging</li>
                        <li>Custom Decoration</li>
                        <li>Professional Photographer</li>
                    </ul>
                </div>
                <div className="services-container">
                    <ul>
                        <li>Florist and Baker</li>
                        <li>Professional Organizer</li>
                        <li>Hosting services</li>
                    </ul>
                </div>
            </div>
        </div>
    );
}
