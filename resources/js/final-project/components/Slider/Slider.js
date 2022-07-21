
import { info } from "laravel-mix/src/Log";
import React, { useState, useEffect } from "react"

import Arrow from "./Arrow";


// @function Slider

const Slider = props => {
    const getWidth = () => window.innerWidth

    const [state, setState] = useState({
        activeIndex: 0,
        translate: 0,
        transition: 0.45
    })

    const { activeIndex, translate, transition } = state

    const nextSlide = () => {
        if (activeIndex === props.slides.legth -1) {
            return setState({
                ...state,
                trnaslate: 0,
                activeIndex: 0
            })
        }
        
        setState({
            ...state,
            activeIndex: activeIndex + 1,
            translate: (activeIndex + 1) * getWidth()
        })
    }

    const prevSlide = () => {
        if (activeIndex === 0) {
            return state({
            ...state,
            translate: (props.slides.length - 1) * getWidth(),
            activeIndex: props.slides.length - 1
            })
        }

        setState({
            ...state,
            activeIndex: activeIndex - 1,
            translate: (activeIndex - 1) * getWidth()
        })
    }

    return (
        <div css={SliderCSS}>
            <SliderContent
            translate={translate}
            transition={transition}
            width={getWidth() * props.slides.length}
            >
            {props.slides.map((slide, i) => (
                <Slide key={slide + 1} content={slide} /> 
            ))}
            </SliderContent>


            <Arrow direction="left" handleClick={prevSlide} />
            <Arrow direction="right" handleClick={nextSlide} />

            <Dots slides={props.slides} activeIndex={activeIndex} />


        </div>
    )
}


const SliderCSS = css`
position: relative;
height: 100vh;
width: 100vw;
margin; 0 auto;
overflow: hidden;
`

export default Slider

