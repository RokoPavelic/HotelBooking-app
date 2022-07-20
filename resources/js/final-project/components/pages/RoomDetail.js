import { useParams } from "react-router-dom";
import { useEffect, useState } from "react";
import styled from "styled-components";
import { useNavigate } from "react-router-dom";
import axios from "axios";
import DatePicker from "react-datepicker";
import { addDays, subDays } from "date-fns";
import "react-datepicker/dist/react-datepicker.css";

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
    const [bookedDays, setBookedDays] = useState([]);
    const [filteredDates, setFilteredDates] = useState([]);
    // const [reservedDays, setReservedDays] = useState([]);

    const url = "http://localhost:3000/api/bookings";

    useEffect(() => {
        axios
            .get(url)
            .then((response) => {
                setBookedDays(response.data);
            })
            .catch((error) => {
                console.log(error);
            });
    }, []);

    useEffect(() => {
        if (!bookedDays) return;
        let roomBookings = bookedDays.filter(
            (room) => room.room_id.toString() === id
        );
        setFilteredDates(
            roomBookings.map((booking) => {
                return {
                    start: subDays(new Date(booking.date_in), 1),
                    end: new Date(booking.date_out),
                };
            })
        );
    }, [bookedDays]);

    useEffect(() => console.log(filteredDates), [filteredDates]);
    useEffect(() => console.log(values), [values]);

    const handleSubmit = async (event) => {
        // prevent the default event behaviour
        event.preventDefault();

        const response = await axios.post("/room/submit", {
            name: values.name,
            lastname: values.lastname,
            email: values.email,
            phone: values.phone,
            date_in: new Date(values.date_in).toISOString().slice(0, 10) ,
            date_out: new Date(values.date_out).toISOString().slice(0, 10),
            room_id: id,
            role_description: "guest",
        });
        const response_data = response.data;
        if (response_data?.success) {
            navigate("/reserved");
        } else {
            navigate("/sorry");
        }
    };

    const handleChange = (name, value) => {
        setValues((previous_values) => {
            return {
                ...previous_values,
                [name]: value,
            };
        });
    };

    return (
        <Wrapper>
            <Tittle>{room?.name}</Tittle>
            <Container>
                <Wrap1>
                    <Info>
                        <p>
                            <strong>Location: </strong> {room?.location}
                        </p>
                        <br />
                        <ul>
                            <strong>Amenities: </strong>
                            <li> {room?.amenities}</li>
                        </ul>
                        <br />
                        <ul>
                            <strong>Facilities: </strong>
                            <li> {room?.facilities}</li>
                        </ul>
                        <br />
                        <strong>Capacity - {room?.capacity} people.</strong>
                        <br />
                        <strong>
                            <p>
                                Price Low Season - {room?.price_low} $ per
                                night.
                            </p>
                            <br />
                            <p>
                                Price Medium Season - {room?.price_medium} $ per
                                night.
                            </p>
                            <br />
                            <p>
                                Price High Season - {room?.price_high} $ per
                                night.
                            </p>
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
                                onChange={(event) =>
                                    handleChange(
                                        event.target.name,
                                        event.target.value
                                    )
                                }
                                required
                            />
                            <p>Last Name</p>
                            <input
                                type="text"
                                name="lastname"
                                id="lastname"
                                value={values.lastname}
                                onChange={(event) =>
                                    handleChange(
                                        event.target.name,
                                        event.target.value
                                    )
                                }
                                required
                            />
                            <p>Email</p>
                            <input
                                type="email"
                                name="email"
                                id="email"
                                value={values.email}
                                onChange={(event) =>
                                    handleChange(
                                        event.target.name,
                                        event.target.value
                                    )
                                }
                                required
                                placeholder="example@example.com"
                            />
                            <p>Phone</p>

                            <input
                                type="tel"
                                id="phone"
                                name="phone"
                                pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                value={values.phone}
                                onChange={(event) =>
                                    handleChange(
                                        event.target.name,
                                        event.target.value
                                    )
                                }
                                placeholder="xxx-xxx-xxxx"
                                required
                            ></input>
                            <strong>
                                <p>Select a date</p>
                            </strong>
                            <br />

                            <DatePicker
                                selected={values.date_in}
                                onChange={(date) =>
                                    handleChange("date_in", date)
                                }
                                placeholderText="Please select a date FROM"
                                minDate={new Date()}
                                excludeDateIntervals={filteredDates}
                                withPortal
                                strictParsing
                            />

                            <DatePicker
                                selected={values.date_out}
                                onChange={(date) =>
                                    handleChange("date_out", date)
                                }
                                placeholderText="Please select a date TO"
                                minDate={values.date_in}
                                withPortal
                            />

                            <button className="form-button">Book Now!</button>
                        </form>
                    </div>
                </Wrap1>

                <Wrap2>
                    <img src={room?.images[0].src} />
                    <img src={room?.images[2].src} />
                    <img src={room?.images[1].src} />
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
