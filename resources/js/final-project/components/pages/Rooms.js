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
                <h1>Our Rooms</h1>
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
`;

const Banner = styled.div`
    width: 100%;
    height: 100vh;
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
`;

const Title = styled.div`
    h1 {
        text-align: center;
        font-size: 3em;
        margin: 2em;
        color: #4f4f4f;
    }
`;

const Container = styled.div`
    display: flex;
    width: 100%;
    margin-bottom: 4em;
    flex-wrap: wrap;
    justify-content: space-evenly;
`;
