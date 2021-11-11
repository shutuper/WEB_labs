package com.example.springapp.controllers;


import com.example.springapp.models.sasha.Presenter;
import com.example.springapp.models.sasha.Program;
import com.example.springapp.repos.sasha.PresenterRepo;
import com.example.springapp.repos.sasha.ProgramRepo;
import com.example.springapp.services.SashaService;
import lombok.AllArgsConstructor;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping("api/v1/sasha")
@AllArgsConstructor
public class SashaController {

	private final PresenterRepo presenterRepo;

	@PostMapping("presenters")
	public Presenter addProgram(@RequestParam("fName") String fName,
	                            @RequestParam("sName") String sName,
	                            @RequestParam("number") String number,
	                            @RequestParam("sex") String sex) {
		Presenter presenter = new Presenter(fName, sName, number, sex);
		return presenterRepo.save(presenter);
	}

	@GetMapping("presenters/id")
	public Presenter findProgram(@RequestParam Long id) {
		return presenterRepo.findById(id).orElse(null);
	}

	@GetMapping("presenters")
	public List<Presenter> getAllProducers() {
		List<Presenter> presenters = presenterRepo.findAll();
		return presenters;
	}

}
