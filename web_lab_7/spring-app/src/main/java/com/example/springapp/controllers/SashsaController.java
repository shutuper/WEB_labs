package com.example.springapp.controllers;

import com.example.springapp.models.sasha.Program;
import com.example.springapp.services.SashaService;
import lombok.AllArgsConstructor;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

@RestController
@RequestMapping("api/v1/sasha")
@AllArgsConstructor
public class SashsaController {

	private final SashaService sashaService;

	@PostMapping("program")
	public Program addProgram(@RequestBody Program program){
		return sashaService.saveProgram(program);
	}


}
