/**
 * Scroll-triggered animations using Intersection Observer
 */
( function() {
	'use strict';

	// Check for reduced motion preference
	const prefersReducedMotion = window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches;

	if ( prefersReducedMotion ) {
		// Make all elements visible immediately
		document.querySelectorAll( '.animate-on-scroll, .stagger-children' ).forEach( function( el ) {
			el.classList.add( 'is-visible' );
		} );
		return;
	}

	// Intersection Observer for scroll animations
	const observerOptions = {
		root: null,
		rootMargin: '0px 0px -50px 0px',
		threshold: 0.1
	};

	const observer = new IntersectionObserver( function( entries ) {
		entries.forEach( function( entry ) {
			if ( entry.isIntersecting ) {
				entry.target.classList.add( 'is-visible' );
				// Stop observing once animated
				observer.unobserve( entry.target );
			}
		} );
	}, observerOptions );

	// Observe all elements with animation classes
	document.querySelectorAll( '.animate-on-scroll, .stagger-children' ).forEach( function( el ) {
		observer.observe( el );
	} );
} )();
