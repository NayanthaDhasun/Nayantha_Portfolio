@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    @include('components.hero')

    <!-- Executive About & Core Pillars -->
    @include('components.about')

    <!-- Specialized ERP Modules & Skills Matrix -->
    @include('components.modules')

    <!-- 5-Stage ERP Implementation Lifecycle -->
    @include('components.lifecycle')

    <!-- Featured Projects & Enterprise Case Studies -->
    @include('components.projects')

    <!-- Career Journey & Experience Timeline -->
    @include('components.experience')

    <!-- Credentials, Certifications & Education -->
    @include('components.qualifications')

    <!-- Consultation Booking & Contact -->
    @include('components.contact')
@endsection
