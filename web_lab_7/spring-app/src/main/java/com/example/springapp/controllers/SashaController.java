package com.example.springapp.controllers;


import com.example.springapp.models.sasha.Program;
import com.example.springapp.repos.sasha.ProgramRepo;
import com.example.springapp.services.SashaService;
import lombok.AllArgsConstructor;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping("api/v1/sasha")
@AllArgsConstructor
public class SashaController {

	private final SashaService sashaService;
	private final ProgramRepo programRepo;

	@PostMapping("programs")
	public Program addProgram(@RequestBody Program program) {
		return sashaService.saveProgram(program);
	}

	@GetMapping("programs/{id}")
	public Program findProgram(@PathVariable Long id) {
		return programRepo.findById(id).orElseThrow(
				() -> new IllegalStateException(String.format("Program with id: %s does not exist", id))
		);
	}

	@GetMapping("programs")
	public List<Program> getAllProducers() {
		return programRepo.findAll();
	}

}
