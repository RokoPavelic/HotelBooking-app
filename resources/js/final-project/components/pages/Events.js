import { useNavigate } from "react-router-dom";

export default function Events() {
    const navigate = useNavigate();

    return (
        <div className="events">
            <div className="events-hero">
                {/* KEEP AS H1 */}
                <h1> A Memorable Experiance</h1>{" "}
                 {/* KEEP AS H1 */}
            </div>
            <h3 className="about_title">
                        Let us host you event
                    </h3>
            <div className="content">
                <p>
                    We count with experianced staff to make your event a one in
                    a lifetime experiance. Let our enchanting atmospher be the
                    setting for your special day,
                    <br />
                    let our award winning chef add an all-involving sensory
                    experiance for your guests.
                </p>
            </div>
            <div className="gallery_cont">
                <img
                    className="gallery_img"
                    src="./images/events_gallery_garden.jpeg"
                    width="400px"
                    height="300px"
                />
                <img
                    className="gallery_img"
                    src="./images/events_gallery_gathering.jpeg"
                    width="400px"
                    height="300px"
                />
                <img
                    className="gallery_img"
                    src="./images/events_hero.jpeg"
                    width="400px"
                    height="300px"
                />
            </div>
         

            <button
                onClick={() => navigate(`/eventbook`)}
                className="events-btn"
            >
                Book Consultation
            </button>

            <div className="services">
            <h3 className="services-title"> Our Services Include:</h3>
            
                <div className="services-container">
                    
                    <ul>
                        <li>Catering</li>
                        <li>Professional Chef</li>
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
