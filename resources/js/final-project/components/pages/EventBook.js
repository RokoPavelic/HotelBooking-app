import styled from "styled-components";
import { useState } from "react";

const EventBook = () => {
    const [values, setValues] = useState({});

    const handleChange = (event) => {
        setValues((previous_values) => {
            return {
                ...previous_values,
                [event.target.name]: event.target.value,
            };
        });
    };

    const handleSubmit = (event) => {
        event.preventDefault();

        console.log(values);

        fetch("https://www.google.com/", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(values),
        })
            .then((response) => response.json())
            .then(() => {
                console.log("Success:");
                navigate("/reserved");
            })
            .catch((error) => {
                console.error("Error:", error);
            });
    };
    return (
        <Form>
            <Banner>
                <p>Leave your special event to us </p>
            </Banner>
            <div className="form">
                <form
                    method="POST"
                    onSubmit={(e) => {
                        handleSubmit(e);
                    }}
                >
                    <h3>Fill the info</h3>

                    <p>Name</p>
                    <input
                        type="text"
                        name="name"
                        id="name"
                        onChange={(e) => {
                            handleChange(e);
                        }}
                        required
                    />
                    <p>Email</p>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        onChange={(e) => {
                            handleChange(e);
                        }}
                        required
                    />
                    <p>Phone</p>
                    <input
                        type="text"
                        id="phone"
                        name="phone"
                        onChange={(e) => {
                            handleChange(e);
                        }}
                    />
                    <p>Event Name</p>
                    <input
                        type="text"
                        className="form-control"
                        name="Event Name"
                        id="subject"
                        onChange={(e) => {
                            handleChange(e);
                        }}
                    />

                    <input
                        type="date"
                        id="to"
                        name="date"
                        onChange={(e) => {
                            handleChange(e);
                        }}
                        placeholder="Event Date"
                    />

                    <textarea
                        id="textarea"
                        name="textarea"
                        rows="5"
                        cols="50"
                        onChange={(e) => {
                            handleChange(e);
                        }}
                        placeholder="Event Description"
                    ></textarea>
                    <input
                        className="submitForm"
                        type="submit"
                        value="Submit"
                    />
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
            .submitForm {
                background-color: #587563;
                height: 30px;
                width: 150px;
                color: white;
                cursor: pointer;
                font-weight: bold;
                box-shadow: 0px 6px 18px -9px rgba(0, 0, 0, 0.75);
                transition: transform 100ms ease-in;

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
