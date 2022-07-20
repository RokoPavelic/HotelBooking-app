import styled from "styled-components";
import Room from "./Room";
import React from "react";

const Rooms = ({ rooms }) => {
    console.log(rooms);
    return (
        <Wrap>
            <Banner>
                <p>A Unique Experince</p>
            </Banner>
            <Title>
                <p>Our Rooms</p>
            </Title>
            <Container>
                {rooms.slice(0, 4).map((room, id) => (
                    <Room room={room} key={id} />
                ))}
            </Container>
        </Wrap>
    );
};

export default Rooms;

const Wrap = styled.div`
    display: flex;
    flex-direction: column;
    align-items: center;
    @media screen and (max-width: 720px) {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 100%;
        owerflow-x: hidden;
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
        url("/images/room_blue_decor.jpeg");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    color: white;
    overflow: hidden;

    p {
        font-family: "Koldby", serif;
        font-weight: 100;
        font-size: 2.5rem;
        color: white;
    }
    @media screen and (max-width: 720px) {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
`;

const Title = styled.div`
    p {
        font-family: "Koldby", serif;
        text-align: center;
        font-size: 2.5em;
        margin: 2em;
        color: #4f4f4f;
    }
    @media screen and (max-width: 720px) {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
`;

const Container = styled.div`
    display: flex;
    max-width: 70%;
    margin-bottom: 10rem;
    flex-wrap: wrap;
    justify-content: space-around;
    @media screen and (max-width: 720px) {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 100%;
        overflow-x: hidden;
    }
`;
