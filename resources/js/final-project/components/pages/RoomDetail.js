import { useParams } from "react-router-dom";
import { useState } from "react";
import styled from "styled-components";
import { useNavigate } from "react-router-dom";
import axios from "axios";

const RoomDetail = ({ rooms }) => {
    const navigate = useNavigate();

    const [values, setValues] = useState({
        name: "name",
        email: "email",
        phone: "phone",
    });

    const { id } = useParams();
    const room = rooms?.find((room) => room.id === id);

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
    };

    return (
        <Wrapper>
            <Tittle>{room.name}</Tittle>
            <Container>
                <Wrap1>
                    <p>asasdiajfjnajsfnkasmdkasmk</p>
                    <p>askmdkasmdkasmkdmaskl</p>
                    <p>Price: 100$ per night</p>
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
                            <button
                                onClick={() => navigate("/reserved")}
                                variant="outlined"
                            >
                                Book now!
                            </button>
                        </form>
                    </div>
                </Wrap1>

                <Wrap2>
                    <img src={`/images/${room?.backgroundImg}`} />
                </Wrap2>
            </Container>
        </Wrapper>
    );
};

export default RoomDetail;

const Wrap2 = styled.div`
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;

    img {
        width: 300px;
        height: 200px;
    }
`;

const Wrap1 = styled.div`
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
`;
const Container = styled.div`
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 80px;
`;

const Wrapper = styled.div`
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-bottom: 3em;
`;
const Tittle = styled.div`
    font-size: 2em;
    padding-bottom: 1em;
    padding-top: 1em;
    text-align: center;
    color: #4f4f4f;
`;
