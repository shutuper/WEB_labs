package com.example.springapp.controllers;

import com.example.springapp.DTO.Message;
import com.example.springapp.models.dima.Passenger;
import com.example.springapp.models.egor.Author;
import com.example.springapp.repos.dima.PassengerRepo;
import com.example.springapp.repos.egor.AuthorRepo;
import lombok.AllArgsConstructor;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping("api/v1/dima")
@AllArgsConstructor
public class DimaController {

	private final PassengerRepo passengerRepo;

	@PostMapping("passengers")
	public Passenger addProducer(@RequestParam("name") String name,
	                             @RequestParam("surname") String surName,
	                             @RequestParam("phone") String phone) {
		Passenger passenger = new Passenger(name, surName, phone);
		return passengerRepo.save(passenger);
	}

	@GetMapping("passengers")
	public List<Passenger> getAllProducers() {
		return passengerRepo.findAll();
	}

	@GetMapping("passengers/id")
	public Passenger findProducer(@RequestParam("id") Long id) {
		return passengerRepo.findById(id).orElse(null);
	}
}
