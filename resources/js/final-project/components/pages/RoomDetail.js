import { useParams } from "react-router-dom";
import { useState } from "react";
import styled from "styled-components";
import { useNavigate } from "react-router-dom";
import axios from "axios";

const RoomDetail = ({ rooms }) => {
    const navigate = useNavigate();

    const [values, setValues] = useState({});

    const { id } = useParams();
    const room = rooms?.find((room) => room.id.toString() === id);
    console.log(id);

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
        <Wrapper>
            <Tittle>{room.name}</Tittle>
            <Container>
                <Wrap1>
                    <Info>
                        <p>
                            <strong>Location: </strong> {room.location}
                        </p>
                        <br />
                        <ul>
                            <strong>Amenities: </strong>
                            <li> {room.amenities}</li>
                        </ul>
                        <br />
                        <ul>
                            <strong>Facilities: </strong>
                            <li> {room.facilities}</li>
                        </ul>
                        <br />
                        <strong>
                            <p>Price: 100$ per night</p>
                        </strong>
                    </Info>
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
                            <strong>
                                <p>Enter a date FROM - TO</p>
                            </strong>
                            <br />
                            <input
                                type="date"
                                id="from"
                                name="from"
                                onChange={(e) => {
                                    handleChange(e);
                                }}
                            />
                            <input
                                type="date"
                                id="to"
                                name="to"
                                onChange={(e) => {
                                    handleChange(e);
                                }}
                            />
                            <input
                                className="submitForm"
                                type="submit"
                                value="Book now!"
                            />
                        </form>
                    </div>
                </Wrap1>

                <Wrap2>
                    <img src={room.images[0].src} />
                    <img src={room.images[2].src} />
                    <img src={room.images[1].src} />
                </Wrap2>
            </Container>
        </Wrapper>
    );
};

export default RoomDetail;

const Wrap2 = styled.div`
    display: flex;
    flex-direction: column;
    align-items: space-between;
    justify-content: center;

    img {
        width: 350px;
        height: 250px;
        border-radius: 10px;
        margin-bottom: 0.5em;

        overflow: hidden;
        box-shadow: 0px 6px 18px -9px rgba(0, 0, 0, 0.75);
        transition: transform 100ms ease-in;

        :hover {
            transform: scale(1.5);
        }
    }
`;

const Wrap1 = styled.div`
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    width: 50%;

    .form {
        width: 80%;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-start;

        .submitForm {
            background-color: #587563;
            height: 50px;
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

        form {
            width: 100%;
        }
    }
`;
const Container = styled.div`
    display: flex;
    align-items: center;
    justify-content: center;

    width: 90%;
`;

const Wrapper = styled.div`
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-bottom: 3.5em;
    width: 100%;
`;
const Tittle = styled.div`
    font-size: 2em;
    padding-bottom: 3em;
    padding-top: 1em;
    text-align: center;
    color: #4f4f4f;
`;

const Info = styled.div`
    display: flex;
    flex-direction: column;

    width: 80%;
`;
