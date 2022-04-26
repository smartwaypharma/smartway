import SimpleBar from "simplebar";

var percentage = 35
var timeline = document.getElementById('timeline')
var line = document.getElementById('line')
line.style.width = timeline.scrollWidth + 'px'

if (timeline.offsetWidth >= 1024) {
    percentage = 25
}

var trackWidth = timeline.offsetWidth * percentage / 100
var scrollbarWidth = trackWidth / 2

new SimpleBar(timeline, { autoHide: false, scrollbarMinSize: scrollbarWidth, scrollbarMaxSize: scrollbarWidth });
