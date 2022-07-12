import React from "react";
import styled from "styled-components";
import { useNavigate } from "react-router-dom";

const Reserved = () => {
    const navigate = useNavigate();
    return (
        <Container>
            <h1>Congratulations you successfully booked a room!</h1>
            <button onClick={() => navigate("/")}>Go back</button>
        </Container>
    );
};

export default Reserved;

const Container = styled.div`
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 50vh;
    width: 60%;
    border: 5px solid #587563;
    border-radius: 10px;
    margin: auto;
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
        url("/images/main_hero.jpeg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    button {
        width: 250px;
        height: 50px;
        background-color: #587563;
        color: white;
        font-size: 20px;
        border: none;
        cursor: pointer;
        margin-top: 2em;
        box-shadow: 0px 6px 18px -9px rgba(0, 0, 0, 0.75);
        transition: transform 100ms ease-in;

        :hover {
            transform: scale(1.07);
        }
    }

    h1 {
        color: white;
        font-weight: bold;
    }
`;
