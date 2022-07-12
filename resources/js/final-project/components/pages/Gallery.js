import React from "react";
// import "../../../../css/pages/gallery.scss";
import App from '../Gallery/App';
import styled from "styled-components";


export default function Gallery() {

    return (
//     <main className="gallery-page">
//        <div className="gallery-header">
// {/* <Banner> */}
//            <h1 className="gallery__title">Gallery</h1>
// {/* </Banner> */}
//         </div>

//         <div className="gallery__content">
//             <h2 className="gallery__subtitle">Enhance Your Experience</h2>
//             <p className="gallery__text">
//             Discover the unique magic of a place, where past and present, history and future, nature and culture are bound together in an unique mix. 
//             </p>
//         </div>

        
//             <App />
            
        
//     </main>

       <Wrap>
            <Banner>
                <p>Gallery</p>
            </Banner>
            <Title>
                <h1>Image Your Experience</h1>
            </Title>
            <Text>
                <p>Discover the unique magic of a place, where past and present, history and future, nature and culture are bound together in an unique mix.</p>
            </Text>
            <Container>
                <App />
            </Container>
        </Wrap>


)
}


const Wrap = styled.div`
    display: flex;
    flex-direction: column;
    align-items: center;
`;

const Banner = styled.div`
    width: 100%;
    height: 20rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
        url("../images/events_gallery_gathering.jpeg");
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
        font-size: 2em;
        margin: 2em;
        color: #4f4f4f;
    }
`;

const Text = styled.div`
    p {
        text-align: center;
        font-size: 1em;
        margin: 0 0 2em;
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