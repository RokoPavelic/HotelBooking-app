import { Routes, Route, Link } from "react-router-dom";
import Navbar from "./components/Navbar";
import Rooms from "./components/pages/Rooms";
import Home from "./components/pages/Home";
import Events from "./components/pages/Events";
import Experience from "./components/pages/Experience";
import Gallery from "./components/pages/Gallery";
import Contacts from "./components/pages/Contacts";
import Footer from "./components/Footer";
import RoomDetail from "./components/pages/RoomDetail";



const rooms = [
    {
        backgroundImg: "room_classic_decor.jpeg",
        name: "Classic Monochrome",
        description:
            "Decoration from the 19th and first years of 20th century, whick we discovered during reconstruction",
        id: "classicMonochrome",
    },
    {
        backgroundImg: "room_blue_decor.jpeg",
        name: "Cyan Room",
        description:
            "Decoration from the 19th and first years of 20th century, whick we discovered during reconstruction",
        id: "cyanRoom",
    },
    {
        backgroundImg: "room_geo_decor.jpeg",
        name: "Geographical Suite",
        description:
            "The main interest of renaud is geography for the art.The large circular installation in the middle.",
        id: "geographicalSuite",
    },
    {
        backgroundImg: "room_gold_decor.jpeg",
        name: "Golden Sunrise",
        description:
            "The main interest of renaud is geography for the art.The large circular installation in the middle.",
        id: "goldenSunrise",
    },
];

export default function App() {
    return (
        <>
            <Navbar />

            <Routes>
                <Route exact path="/" element={<Home />} />
                <Route path="/rooms/*" element={<Rooms rooms={rooms} />} />
                <Route path="/room/" element={<RoomDetail rooms={rooms} />}>
                    <Route path=":id" element={<RoomDetail rooms={rooms} />} />
                </Route>
                <Route path="/events" element={<Events />} />
                <Route path="/experience" element={<Experience />} />
                <Route path="/gallery" element={<Gallery />} />
                <Route path="/contacts" element={<Contacts />} />
            </Routes>

            <Footer />
        </>
    );
}
