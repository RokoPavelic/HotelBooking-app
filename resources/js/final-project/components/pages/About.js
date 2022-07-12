import React from "react";
import styled from "styled-components";

const About = () => {
    return (
        <Wrap>
            <Banner>
                <p>About Chateau Trebesice</p>
            </Banner>
            <Content>
                <p>
                    The first written mention of the fortress in "trebesiz"
                    dates back to 1309, when it was owned by konrad kutner, a
                    rich citizen of Kutna Hora. <br />
                    <br />
                    From the Middle Ages we have only a few material traces of
                    precise history : ground entrance to the north side with
                    sandstone Gothic arc and several frescoes in the room above
                    the entrance, which captures musicians,lumberjacks and
                    textile drapery and probably come from 15th century and are
                    similar in style freska in the cathedral Kutna Hora.
                </p>
                <img src="/images/about_maincourt.png" alt="" />
                <strong>Maincourt</strong>
                <img src="/images/about_interior_before.jpeg" alt="" />
                <strong>Interior before reconstruction</strong>
                <img src="/images/about_facade.png" alt="" />
                <strong>Facade</strong>
                <img src="/images/about_bridge_before.png" alt="" />
                <strong>Bridge before reconstruction</strong>
            </Content>
        </Wrap>
    );
};

export default About;

const Banner = styled.div`
    width: 100%;
    height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
        url("/images/about_hero.jpeg");
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    color: white;
    overflow: hidden;

    p {
        font-size: 3em;
    }
`;

const Wrap = styled.div`
    display: flex;
    flex-direction: column;
`;
const Content = styled.div`
    padding-top: 5em;
    padding-bottom: 5em;
    width: 50%;
    margin: auto;

    p {
        font-size: 1.5em;
    }

    img {
        width: 100%;
        height: 500px;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        margin-top: 2em;
        margin-bottom: 2em;
        overflow: hidden;
        box-shadow: 0px 6px 18px -9px rgba(0, 0, 0, 0.75);
        transition: transform 100ms ease-in;
    }

    strong {
        font-size: 1.2em;
        text-transform: uppercase;
        color: #4f4f4f;
    }
`;
