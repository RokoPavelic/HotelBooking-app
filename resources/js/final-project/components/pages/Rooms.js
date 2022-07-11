import styled from "styled-components";
import Room from "./Room";
import React from "react";

const Rooms = () => {
    return (
        <Wrap>
            <Banner>
                <p>A Unique Experince</p>
            </Banner>
            <Title>
                <h1>Our Rooms</h1>
            </Title>
            <Container>
                <Room
                    backgroundImg="room_classic_decor.jpeg"
                    name="Classic Monochrome"
                    description="Decoration from the 19th and first years of 20th century, whick we discovered during reconstruction"
                />
                <Room
                    backgroundImg="room_blue_decor.jpeg"
                    name="Cyan Room"
                    description="Decoration from the 19th and first years of 20th century, whick we discovered during reconstruction"
                />
                <Room
                    backgroundImg="room_geo_decor.jpeg"
                    name="Geographical Suite"
                    description="The main interest of renaud is geography for the art.The large circular installation in the middle."
                />
                <Room
                    backgroundImg="room_gold_decor.jpeg"
                    name="Golden Sunrise"
                    description="The main interest of renaud is geography for the art.The large circular installation in the middle."
                />
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
