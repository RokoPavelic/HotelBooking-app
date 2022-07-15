import React from "react";
import styled from "styled-components";
import { useNavigate } from "react-router-dom";

const Reserved = () => {
    const navigate = useNavigate();
    return (
        <Container>
            <p>
                Your room at <span> Hotel Château Třebešice</span> is booked
            </p>

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
    height: 70vh;
    width: 60%;
    border: 5px solid #587563;
    border-radius: 10px;
    margin: auto;
    background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.6)),
        url("/images/main_hero.jpeg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    margin-top: 5em;
    margin-bottom: 5em;

    button {
        width: 250px;
        height: 40px;
        background-color: #587563;
        color: white;
        font-size: 20px;
        font-weight: bold;
        border: none;
        cursor: pointer;
        margin-top: 2em;
        box-shadow: 0px 6px 18px -9px rgba(0, 0, 0, 0.75);
        transition: transform 100ms ease-in;

        :hover {
            transform: scale(1.07);
        }
    }

    p {
        color: white;
        font-weight: bold;
        font-size: 2em;
    }

    span {
        color: white;
        text-decoration: underline;
    }
`;
