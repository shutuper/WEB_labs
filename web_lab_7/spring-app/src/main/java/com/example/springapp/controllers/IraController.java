package com.example.springapp.controllers;

import com.example.springapp.models.ira.Producers;
import com.example.springapp.repos.ira.ProducersRepo;
import lombok.AllArgsConstructor;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping("api/v1/ira")
@AllArgsConstructor
public class IraController {

	private final ProducersRepo producersRepo;

	@PostMapping("producers")
	public Producers addProducer(@RequestParam("Name") String Name,
	                             @RequestParam("Country") String Country
	) {
		Producers producers = new Producers(Name, Country);
		return producersRepo.save(producers);
	}

	@GetMapping("producers")
	public List<Producers> getAllProducers() {
		return producersRepo.findAll();
	}

	@GetMapping("producers/id")
	public Producers findProducer(@RequestParam("id") Integer id) {
		return producersRepo.findById(id).orElse(null);
	}

}
