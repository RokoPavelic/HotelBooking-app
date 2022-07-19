import styled from "styled-components";
import { useState, useEffect } from "react";
import axios from "axios";
import { useNavigate } from "react-router-dom";

const EventBook = () => {
    const navigate = useNavigate();
    const [values, setValues] = useState({
        name: "",
        lastname: "",
        email: "",
        phone: "",
        event_name: "",
        date_in: "",
        date_out: "",
        event_description: "",
        room_id: "",
    });

    const [room, setRoom] = useState([]);

    const disablePastDate = () => {
        const today = new Date();
        const dd = String(today.getDate() + 0).padStart(2, "0");
        const mm = String(today.getMonth() + 1).padStart(2, "0"); //January is 0!
        const yyyy = today.getFullYear();
        return yyyy + "-" + mm + "-" + dd;
    };

    const handleSubmit = async (event) => {
        // prevent the default event behaviour
        event.preventDefault();

        const response = await axios.post("/event/submit", values);
        const response_data = response.data;
        console.log(response_data);
        navigate("/feedback");
    };

    const handleChange = (event) => {
        setValues((previous_values) => {
            return {
                ...previous_values,
                [event.target.name]: event.target.value,
            };
        });
    };

    const fetchRoom = async () => {
        const response = await axios.get("api/room/event", values);
        const response_data = response.data;
        // console.log(response_data);
        setRoom(response_data);
    };

    useEffect(() => {
        fetchRoom();
    }, []);

    console.log(room);

    return (
        <Form>
            <Banner>
                <p>Leave your special event to us </p>
            </Banner>
            <div className="form">
                <form onSubmit={handleSubmit}>
                    <h3>Fill the info</h3>
                    <p>Name</p>
                    <input
                        type="text"
                        name="name"
                        id="name"
                        value={values.name}
                        onChange={handleChange}
                        required
                    />
                    <p>Last Name</p>
                    <input
                        type="text"
                        name="lastname"
                        id="lastname"
                        value={values.lastname}
                        onChange={handleChange}
                        required
                    />
                    <p>Email</p>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        value={values.email}
                        onChange={handleChange}
                        placeholder="example@example.com"
                        required
                    />
                    <p>Phone</p>
                    <input
                        type="tel"
                        id="phone"
                        name="phone"
                        pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                        value={values.phone}
                        onChange={handleChange}
                        placeholder="xxx-xxx-xxxx"
                        required
                    />
                    <p>Event Name</p>
                    <input
                        type="text"
                        className="form-control"
                        name="event_name"
                        id="subject"
                        value={values.event_name}
                        onChange={handleChange}
                        required
                    />
                    <p>Select Event Location </p>
                    <select
                        id="room_id"
                        name="room_id"
                        value={values.room_id}
                        onChange={handleChange}
                    >
                        <option>--- Select Location ---</option>
                        <br />
                        {room.map((loc) => {
                            return (
                                <option id={loc.id} value={loc.id}>
                                    {loc.name}
                                </option>
                            );
                        })}
                    </select>
                    <br />
                    <p>Select the date</p>
                    <input
                        type="date"
                        id="to"
                        name="date_in"
                        value={values.date_in}
                        onChange={handleChange}
                        placeholder="Event Date"
                        min={disablePastDate()}
                        required
                    />
                    <input
                        type="date"
                        id="to"
                        name="date_out"
                        value={values.date_out}
                        onChange={handleChange}
                        placeholder="Choose Date"
                        required
                    />
                    <textarea
                        id="textarea"
                        name="event_description"
                        rows="5"
                        cols="50"
                        value={values.event_description}
                        onChange={handleChange}
                        placeholder="Event Description"
                    ></textarea>
                    <button className="form-button">Submit</button>
                </form>
            </div>
        </Form>
    );
};

export default EventBook;

const Form = styled.div`
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 100%;
    @media screen and (max-width: 720px) {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 100%;
    }

    .form {
        width: 80%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;

        form {
            width: 50%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            @media screen and (max-width: 720px) {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                width: 100%;
            }

            input {
                margin-bottom: 1.5em;
            }
            .form-button {
                background-color: #587563;
                height: 30px;
                width: 80%;
                color: white;
                cursor: pointer;
                font-weight: bold;
                box-shadow: 0px 6px 18px -9px rgba(0, 0, 0, 0.75);
                transition: transform 100ms ease-in;
                margin-bottom: 2em;

                :hover {
                    transform: scale(1.07);
                }
            }
        }
    }
`;

const Banner = styled.div`
    width: 100%;
    height: 20rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
        url("/images/events_gallery_toast.jpg");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    color: white;
    overflow: hidden;

    p {
        font-size: 3em;
    }
    @media screen and (max-width: 720px) {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
`;
