import styled from "styled-components";
import Room from "./Room";
import React from "react";

const Rooms = ({ rooms }) => {
    return (
        <Wrap>
            <Banner>
                <p>A Unique Experince</p>
            </Banner>
            <Title>
                <p>Our Rooms</p>
            </Title>
            <Container>
                {rooms.map((room, id) => (
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
        font-size: 3em;
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
        text-align: center;
        font-size: 3em;
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
    width: 100%;
    margin-bottom: 4em;
    flex-wrap: wrap;
    justify-content: space-evenly;
    @media screen and (max-width: 720px) {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
`;
