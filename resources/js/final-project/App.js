import { Routes, Route, Link } from "react-router-dom";
import { useState, useEffect } from "react";
import axios from "axios";
import Navbar from "./components/Navbar";
import Rooms from "./components/pages/Rooms";
import Home from "./components/pages/Home";
import Events from "./components/pages/Events";
import About from "./components/pages/About";
import Gallery from "./components/pages/Gallery";
import Contacts from "./components/pages/Contacts";
import Footer from "./components/Footer";
import RoomDetail from "./components/pages/RoomDetail";
import Reserved from "./components/pages/Reserved";
import Feedback from "./components/pages/feedback";

// const rooms = [
//     {
//         backgroundImg: "room_classic_decor.jpeg",
//         name: "Classic Monochrome",
//         description:
//             "Decoration from the 19th and first years of 20th century, whick we discovered during reconstruction",
//         id: "classicMonochrome",
//     },
//     {
//         backgroundImg: "room_blue_decor.jpeg",
//         name: "Cyan Room",
//         description:
//             "Decoration from the 19th and first years of 20th century, whick we discovered during reconstruction",
//         id: "cyanRoom",
//     },
//     {
//         backgroundImg: "room_geo_decor.jpeg",
//         name: "Geographical Suite",
//         description:
//             "The main interest of renaud is geography for the art.The large circular installation in the middle.",
//         id: "geographicalSuite",
//     },
//     {
//         backgroundImg: "room_gold_decor.jpeg",
//         name: "Golden Sunrise",
//         description:
//             "The main interest of renaud is geography for the art.The large circular installation in the middle.",
//         id: "goldenSunrise",
//     },
// ];

export default function App() {
    const [rooms, setRooms] = useState([]);

    const url = "http://localhost:3000/api/rooms";

    useEffect(() => {
        axios
            .get(url)
            .then((response) => {
                setRooms(response.data);
            })
            .catch((error) => {
                console.log(error);
            });
    }, []);
    // console.log(rooms);

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
                <Route path="/about" element={<About />} />
                <Route path="/gallery" element={<Gallery />} />
                <Route path="/contacts" element={<Contacts />} />
                <Route path="/reserved" element={<Reserved />} />
                <Route path="/feedback" element={<Feedback />} />
            </Routes>

            <Footer />
        </>
    );
}
