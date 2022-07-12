import React from "react";
import styled from "styled-components";

const Room = ({ name, description, backgroundImg }) => {
    return (
        <Container>
            <Wrap bgImage={backgroundImg}></Wrap>
            <div>
                <h3>{name}</h3>
                <p>{description}</p>
                <button>More</button>
            </div>
        </Container>
    );
};

export default Room;

const Wrap = styled.div`
    width: 500px;
    height: 400px;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-image: ${(props) => `url("/images/${props.bgImage}")`};
    margin: 10px;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0px 6px 18px -9px rgba(0, 0, 0, 0.75);
    transition: transform 100ms ease-in;
    :hover {
        transform: scale(1.07);
    }
`;
const Container = styled.div`
    width: 500px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    border-radius: 10px;
    padding: 0.2em;
    div {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 500px;
        h3 {
            font-size: 2em;
            padding-bottom: 1em;
            padding-top: 1em;
            text-align: center;
            color: #4f4f4f;
        }

        button {
            margin-top: 1em;
            background-color: #587563;
            width: 150px;
            height: 30px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            color: white;
            font-weight: bold;
        }
    }
`;
