import React from "react";
import styled from "styled-components";
import { useNavigate } from "react-router-dom";

const Feedback = () => {
    const navigate = useNavigate();
    return (
        <Container>
            <h1>Sorry those dates are alredy taken</h1>
            <p>please choose a different period or a different room</p>
            <button onClick={() => navigate("/")}>Go back</button>
        </Container>
    );
};

export default Feedback;

const Container = styled.div`
    height: 50vh;
    width: 50%;
    margin: auto;
    border: 1px solid black;
    margin-bottom: 5em;
    margin-top: 5em;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;

    button {
        width: 150px;
        height: 30px;
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
`;
