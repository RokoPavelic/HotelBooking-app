import styled from "styled-components";
import { useState } from "react";
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
        date: "",
        event_description: "",
    });

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
                        required
                    />
                    <p>Phone</p>
                    <input
                        type="text"
                        id="phone"
                        name="phone"
                        value={values.phone}
                        onChange={handleChange}
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

                    <input
                        type="date"
                        id="to"
                        name="date"
                        value={values.date}
                        onChange={handleChange}
                        placeholder="Event Date"
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
            align-items: center;
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
