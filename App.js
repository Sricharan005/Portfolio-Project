import React from 'react';
import Hero from './Hero';
import About from './About';
import Projects from './Projects';
import Timeline from './Timeline';

const App = () => {
    return (
        <div>
            <Hero />
            <nav>
                <ul>
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#projects">Projects</a>
                    </li>
                    <li>
                        <a href="#timeline">Timeline</a>
                    </li>
                </ul>
            </nav>
            <About />
            <Projects />
            <Timeline />
        </div>
    );
};

export default App;
