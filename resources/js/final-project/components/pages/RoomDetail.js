import { useParams } from "react-router-dom";
import { useState } from "react";
import styled from "styled-components";
import { useNavigate } from "react-router-dom";
import axios from "axios";

const RoomDetail = ({ rooms }) => {
    const { id } = useParams();
    const room = rooms?.find((room) => room.id.toString() === id);

    const navigate = useNavigate();
    const [values, setValues] = useState({
        name: "",
        lastname: "",
        email: "",
        phone: "",
        date_in: "",
        date_out: "",
        room_id: id,
        role_description: "guest",
    });

    // console.log(id);

    const handleSubmit = async (event) => {
        // prevent the default event behaviour
        event.preventDefault();

        const response = await axios.post("/room/submit", values);
        const response_data = response.data;
        if (response_data === "these dates are already taken") {
            navigate("/sorry");
        } else {
            navigate("/reserved");
        }

        console.log(response_data);
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
                        <form method="POST" onSubmit={handleSubmit}>
                            <h3>Fill the info</h3>
                            {/* <input type="hidden" value={ id } name="room_id" id="hidden"/> */}

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
                                minlength="10"
                                required
                            />
                            <strong>
                                <p>Enter a date FROM - TO</p>
                            </strong>
                            <br />
                            <input
                                className="date"
                                type="date"
                                id="from"
                                name="date_in"
                                value={values.date_in}
                                onChange={handleChange}
                                required
                            />
                            <input
                                className="date"
                                type="date"
                                id="to"
                                name="date_out"
                                value={values.date_out}
                                onChange={handleChange}
                                required
                            />
                            <button className="form-button">Book Now!</button>
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
        @media screen and (max-width: 720px) {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            box-shadow: 0px 6px 18px -9px rgba(0, 0, 0, 0.75);
            transition: transform 100ms ease-in;

            :hover {
                transform: scale(1.07);
            }
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

        .date {
            @media screen and (max-width: 720px) {
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                justify-content: flex-start;
                width: 100%;
            }
        }

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
    @media screen and (max-width: 720px) {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width:100%;
    }
`;
const Container = styled.div`
    display: flex;
    align-items: center;
    justify-content: center;

    width: 90%;
    @media screen and (max-width: 720px) {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 100%;
    }
`;

const Wrapper = styled.div`
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-bottom: 3.5em;
    width: 100%;
    @media screen and (max-width: 720px) {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 100%;
    }
`;
const Tittle = styled.div`
    font-size: 2em;
    padding-bottom: 3em;
    padding-top: 1em;
    text-align: center;
    color: #4f4f4f;
    @media screen and (max-width: 720px) {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 100%;
    }
`;

const Info = styled.div`
    display: flex;
    flex-direction: column;

    width: 80%;
    @media screen and (max-width: 720px) {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 100%;
    }
`;
